<div>
    <div class="pt-btn-col-close">
        <a href="#">
            <span class="pt-icon">
                <svg>
                    <use xlink:href="#icon-close"></use>
                </svg>
            </span>
            <span class="pt-text">
                Close
            </span>
        </a>
    </div>
    <div class="pt-collapse open ">
        <h3 class="pt-collapse-title">
            التصنيفات المختارة
            <span class="pt-icon">
            <svg><use xlink:href="#icon-arrow_small_bottom"></use></svg>
        </span>
        </h3>
        <div class="pt-collapse-content">
            <ul class="pt-filter-list">

                @if(count($filters['genders']) > 0 && $page_type != 'gender')
                    @foreach ($filters['genders'] as $f)
                        <li class="active">
                            <a href="javascript:void(0)" wire:click='deleteFilter("genders","{{ $f }}")'>
                                <i class="icon"><svg><use xlink:href="#icon-close"></use></svg></i>
                                {{ $f }}
                            </a>
                        </li>
                    @endforeach
                @endif
                @if(count($filters['categories']) > 0 && $page_type != 'category')
                @foreach ($filters['categories'] as $f)
                <li class="active">
                    <a href="javascript:void(0)" wire:click='deleteFilter("categories","{{ $f }}")'>
                        <i class="icon"><svg><use xlink:href="#icon-close"></use></svg></i>
                        {{ $f }}
                    </a>
                </li>
                @endforeach
                @endif
                @if(count($filters['companies']) > 0 )
                @foreach ($filters['companies'] as $f)
                <li class="active">
                    <a href="javascript:void(0)" wire:click='deleteFilter("companies","{{ $f }}")'>
                        <i class="icon"><svg><use xlink:href="#icon-close"></use></svg></i>
                        {{ $f }}
                    </a>
                </li>
                @endforeach
                @endif
                @if(count($filters['materials']) > 0 )
                @foreach ($filters['materials'] as $f)
                <li class="active">
                    <a href="javascript:void(0)" wire:click='deleteFilter("materials","{{ $f }}")'>
                        <i class="icon"><svg><use xlink:href="#icon-close"></use></svg></i>
                        {{ $f }}
                    </a>
                </li>
                @endforeach
                @endif
                @if(count($filters['sizes']) > 0 )
                @foreach ($filters['sizes'] as $f)
                <li class="active">
                    <a href="javascript:void(0)" wire:click='deleteFilter("sizes","{{ $f }}")'>
                        <i class="icon"><svg><use xlink:href="#icon-close"></use></svg></i>
                        {{ $f }}
                    </a>
                </li>
                @endforeach
                @endif
                @if(count($filters['prices']) > 0 )
                @foreach ($filters['prices'] as $f)
                <li class="active">
                    <a href="javascript:void(0)" wire:click='deleteFilter("prices","{{ $f }}")'>
                        <i class="icon"><svg><use xlink:href="#icon-close"></use></svg></i>
                        {{ $f }}
                    </a>
                </li>
                @endforeach
                @endif

            </ul>

            {{-- <a href="#" wire:click="delAllFilter" class="btn-link"><span class="pt-text">Clear All</span></a> --}}
        </div>
    </div>
    @if($page_type != 'gender')
        <div class="pt-collapse open">
            <h3 class="pt-collapse-title">
                الاصناف
                <span class="pt-icon">
                <svg>
                    <use xlink:href="#icon-arrow_small_bottom"></use>
                </svg>
            </span>
            </h3>
            <div class="pt-collapse-content">
                <ul class="pt-list-row">
                    @foreach ($genders as $g)
                    <li><a href="javascript:void(0)" wire:click='makeFilter("genders",{{ $g->id }},"{{ $g->name }}")'>{{ $g->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if($page_type != 'category')
    <div class="pt-collapse open">
        <h3 class="pt-collapse-title">
            انواع الملابس
            <span class="pt-icon">
            <svg>
                <use xlink:href="#icon-arrow_small_bottom"></use>
            </svg>
        </span>
        </h3>
        <div class="pt-collapse-content">
            <ul class="pt-list-row">
                @foreach ($categories as $c)
                    <li><a href="javascript:void(0)" wire:click='makeFilter("categories",{{ $c->id }},"{{ $c->name }}")'>{{ $c->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <div class="pt-collapse open">
        <h3 class="pt-collapse-title">
            الشركات
            <span class="pt-icon">
            <svg>
                <use xlink:href="#icon-arrow_small_bottom"></use>
            </svg>
        </span>
        </h3>
        <div class="pt-collapse-content">
            <ul class="pt-list-row">
                @foreach ($companies as $c)
                <li><a href="javascript:void(0)" wire:click='makeFilter("companies",{{ $c->id }},"{{ $c->name }}")'>{{ $c->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="pt-collapse open">
        <h3 class="pt-collapse-title">
            الخامات
            <span class="pt-icon">
            <svg>
                <use xlink:href="#icon-arrow_small_bottom"></use>
            </svg>
        </span>
        </h3>
        <div class="pt-collapse-content">
            <ul class="pt-list-row">
                @foreach ($materials as $m)
                <li><a href="javascript:void(0)" wire:click='makeFilter("materials",{{ $m->id }},"{{ $m->name }}")'>{{ $m->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="pt-collapse open">
        <h3 class="pt-collapse-title">
            المقاسات
            <span class="pt-icon">
            <svg>
                <use xlink:href="#icon-arrow_small_bottom"></use>
            </svg>
        </span>
        </h3>
        <div class="pt-collapse-content">
            <ul class="pt-list-row">
                @foreach ($sizes as $s)
                <li><a href="javascript:void(0)" wire:click='makeFilter("sizes",{{ $s->id }},"{{ $s->name }}")'>{{ $s->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="pt-collapse open">
        <h3 class="pt-collapse-title">
            الاسعار
            <span class="pt-icon">
            <svg>
                <use xlink:href="#icon-arrow_small_bottom"></use>
            </svg>
        </span>
        </h3>
        <div class="pt-collapse-content">
            <ul class="pt-list-row" style="flex-direction:column">
                <li><a href="javascript:void(0)" wire:click='makeFilter("prices",0,"اقل من 5 دينار")'>اقل من 5 دينار</a></li>
                <li><a href="javascript:void(0)" wire:click='makeFilter("prices",1,"من 5 دينار الى 10 دينار")'>من 5 دينار ال 10 دينار</a></li>
                <li><a href="javascript:void(0)" wire:click='makeFilter("prices",2,"من 10 دينار الى 15 دينار")'>من 10 دينار الى 15 دينار</a></li>
                <li><a href="javascript:void(0)" wire:click='makeFilter("prices",3,"من 15 دينار الى 20 دينار")'>من 15 دينار الى 20 دينار</a></li>
                <li><a href="javascript:void(0)" wire:click='makeFilter("prices",4,"اعلى من 20 دينار")'>اعلى من 20 دينار</a></li>
            </ul>
        </div>
    </div>




</div>
