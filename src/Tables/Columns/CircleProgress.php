<?php

namespace IbrahimBougaoua\FilaProgress\Tables\Columns;

use Filament\Tables\Columns\Column;

class CircleProgress extends Column
{
    protected $canShow = true;

    protected string $view = 'filaprogress::tables.columns.circle-progress';

    public function hideProgressValue($canShow = false)
    {
        $this->canShow = $canShow;

        return $this;
    }

    public function getCanShow(): bool
    {
        return $this->canShow;
    }
}
