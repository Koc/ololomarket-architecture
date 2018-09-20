<?php

namespace Ololomarket\Domain\PriceAggregator\Entity;

use Ololomarket\Domain\Core\Collection;
use Ololomarket\Domain\Marketplace\ValueObject\CompanyId;
use Ololomarket\Domain\PriceAggregator\Command\SaveCategories;
use Ololomarket\Domain\PriceAggregator\Command\SavePriceItem;
use Ololomarket\Domain\PriceAggregator\ValueObject\PriceItemId;
use Ololomarket\Domain\PriceAggregator\ValueObject\ShopProductId;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class Shop
{
    /**
     * @var CompanyId
     */
    private $id;

    /**
     * @var string
     */
    private $priceUrl;

    /**
     * @var \DateTimeInterface
     */
    private $priceParsedAt;

    /**
     * @var \DateTimeInterface
     */
    private $lightPriceParsedAt;

    public function __construct(CompanyId $id, string $priceUrl, SaveCategories $saveCategories)
    {
        $this->id = $id;
        $this->priceUrl = $priceUrl;
        $this->priceParsedAt = new \DateTimeImmutable('0000-00-00');
        $this->lightPriceParsedAt = new \DateTimeImmutable('0000-00-00');
        //FIXME: array collection
        $this->categories = [];
        $this->saveCategories($saveCategories);
        $this->priceItems = [];
    }

    public function addTask(Task $task) // TaskAdded
    {

    }

    public function completeTask(Task $task)
    {

    }

    public function markPriceAsParsed(): void
    {
        $this->priceParsedAt = new \DateTimeImmutable();
    }

    public function markLightPriceAsParsed(): void
    {
        $this->lightPriceParsedAt = new \DateTimeImmutable();
    }

    public function saveCategories(SaveCategories $dto): void
    {
        // ...
    }

    public function savePriceItem(ShopProductId $shopProductId, SavePriceItem $dto): void
    {
        //FIXME: generate price item id (maybe depends on this.id + shopProductId)

        if ($this->priceItems->containsKey($shopProductId)) {
            /** @var PriceItem $priceItem */
            $priceItem = $this->priceItems->get($shopProductId);
            $priceItem->savePriceItem($dto);

            return;
        }

        $priceItem = new PriceItem(new PriceItemId(1), $this, $shopProductId, $dto);
    }

    public function removePriceItem(PriceItem $priceItem)
    {


    }

    public function updateVersion()
    {

    }

    public function getId(): CompanyId
    {
        return $this->id;
    }

    public function getPriceUrl(): string
    {
        return $this->priceUrl;
    }

    public function getPriceParsedAt(): \DateTimeInterface
    {
        return $this->priceParsedAt;
    }

    public function getLightPriceParsedAt(): \DateTimeInterface
    {
        return $this->lightPriceParsedAt;
    }
}
