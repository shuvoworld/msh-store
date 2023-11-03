@extends(backpack_view('blank'))

{{-- @php
    if (config('backpack.base.show_getting_started')) {
        $widgets['before_content'][] = [
            'type'        => 'view',
            'view'        => 'backpack::inc.getting_started',
        ];
    } else {
        $widgets['before_content'][] = [
            'type'        => 'jumbotron',
            'heading'     => trans('backpack::base.welcome'),
            'content'     => trans('backpack::base.use_sidebar'),
            'button_link' => backpack_url('logout'),
            'button_text' => trans('backpack::base.logout'),
        ];
    }
@endphp --}}

@section('content')
    @php
        Widget::add(
            [
            'type'    => 'div',
            'class'   => 'row',
            'content' =>
            [ 
                [
                    'type' => 'card',
                    'wrapper' => ['class' => 'col-sm-4 col-md-2'],
                    'class'   => 'card bg-success text-white',
                    'content' => [
                    'header' => 'Course',
                    'body' => '<a class="text-white" href="'.backpack_url('course').'">See Details</a>'
                    ]
                ],
                [
                    'type' => 'card',
                    'wrapper' => ['class' => 'col-sm-4 col-md-2'],
                    'class'   => 'card bg-danger text-white',
                    'content' => [
                    'header' => 'Batch',
                    'body' => '<a class="text-white" href="'.backpack_url('training-batch').'">See Details</a>'
                    ]
                ],
              [
                    'type' => 'card',
                    'wrapper' => ['class' => 'col-sm-4 col-md-2'],
                    'class'   => 'card bg-dark text-white',
                    'content' => [
                    'header' => 'Course',
                    'body' => '<a class="text-white" href="'.backpack_url('course').'">See Details</a>'
                    ]
                ],
                [
                    'type' => 'card',
                    'wrapper' => ['class' => 'col-sm-4 col-md-2'],
                    'class'   => 'card bg-primary text-white',
                    'content' => [
                    'header' => 'Course',
                    'body' => '<a class="text-white" href="'.backpack_url('course').'">See Details</a>'
                    ]
                ]

            ],
            

        ]
        );

    @endphp
@endsection
