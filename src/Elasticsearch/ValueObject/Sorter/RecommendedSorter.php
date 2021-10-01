<?php
declare(strict_types=1);

namespace App\Elasticsearch\ValueObject\Sorter;

final class RecommendedSorter implements SorterInterface
{
	public function definition(): array
	{
		return [
			'_score' => self::DESCENDING
		];
	}
}
