<?php

namespace KatalinKS\Order;

use App\Services\Eshop\Cart\Interfaces\CartObj;
use KatalinKS\CompanyPlaces\Interfaces\CompanyPlaces;
use KatalinKS\Order\Builder\OrderItemBuilder;
use KatalinKS\Order\Contracts\Factory\Factory;
use KatalinKS\Order\Contracts\OrderBuyer;
use KatalinKS\Order\Contracts\Repository\OrderRepository;
use KatalinKS\Order\Handlers\DataPreparing;
use KatalinKS\PersonType\PersonTypeFacade;
use KatalinKS\PriceList\Interfaces\Objects\PriceListObj;

class Order
{
    public function __construct(
        private Factory $factory,
        private OrderItemBuilder $itemBuilder,
        private CompanyPlaces $companyPlaces,
        private OrderRepository $orderRepository
    ) {
    }

    public function create(CartObj $cart, PriceListObj $priceList, string $browserId): Contracts\Order
    {
        $orderData = DataPreparing::orderData($priceList, $browserId);

        $order = $this->factory->createOrder($orderData);

        foreach ($cart->getItems() as $item) {
            $itemData = DataPreparing::orderItemData($item, $order);

            $this->factory->createOrderItem($itemData);
        }

        return $order;
    }

    public function getCurrent(string $browserId): Contracts\Order
    {
        return $this->orderRepository->getByBrowserId($browserId)
            ->where('status', '=', 'not-confirmed')
            ->first();
    }

    public function setBuyer(array $contactData, array $legalData, string $browserId): OrderBuyer
    {
        $order = $this->getCurrent($browserId);

        $buyerData = DataPreparing::buyerData($legalData['person_type_id'], $order);
        $contact = DataPreparing::contactData($contactData);

        $requisites = PersonTypeFacade::getType($legalData['person_type_id']) == 'legal' ? DataPreparing::legalData($legalData['requisites']) : null;

        $buyer = $this->factory->createOrderBuyer($buyerData, $contact, $requisites);

        return $buyer;
    }
}
