@php
    $total = $getState()['total'];
    $progress = $getState()['progress'];
    $progress = $total > 0 ? ($progress / $total) * 100 : 0;

    if($progress == 100){
        $progressColor = '#2980b9';
    } else if($progress > 50){
        $progressColor = '#27ae60';
    } else if($progress > 25){
        $progressColor = '#f39c12';
    } else {
        $progressColor = '#e74c3c';
    }

    $displayProgress = $progress == 100 ? number_format($progress, 0) : number_format($progress, 2);
@endphp

<div class="progress-container">
    <div class="progress-bar" style="width: {{ $displayProgress }}%; background-color: {{ $progressColor }};"></div>
    <div class="progress-text">
        @if($column instanceof \IbrahimBougaoua\FilaProgress\Tables\Columns\ProgressBar && $column->getCanShow())
            <small @class([
                'text-gray-700' => $displayProgress != 100,
                'text-white' => $displayProgress == 100
                ])>
                {{ $displayProgress }}%
            </small>
        @endif
    </div>
</div>

<style>
    .progress-container {
        width: 100%;
        background-color: #e5e7eb;
        border-radius: 0.375rem;
        height: 1.5rem;
        overflow: hidden;
        position: relative;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    .progress-bar {
        height: 100%;
        border-radius: 0.375rem;
        transition: width 0.3s, background-color 0.3s;
        width: 0;
    }
    .progress-text {
        text-align: center;
        font-size: 0.875rem;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }
    .progress-bar::after {
        content: '';
        display: block;
        height: 100%;
        border-radius: 0.375rem;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0) 25%, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 75%, rgba(255, 255, 255, 0) 100%);
        background-size: 40px 40px;
        animation: progress-bar-stripes 1s linear infinite;
    }
    @keyframes progress-bar-stripes {
        from {
            background-position: 40px 0;
        }
        to {
            background-position: 0 0;
        }
    }
</style>