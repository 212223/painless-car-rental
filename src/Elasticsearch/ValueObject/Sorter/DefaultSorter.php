<?php
declare(strict_types=1);

namespace App\Elasticsearch\ValueObject\Sorter;

final class DefaultSorter implements SorterInterface
{
	public function definition(): array
	{
		return [
			'_id' => self::ASCENDING
		];
	}
}
