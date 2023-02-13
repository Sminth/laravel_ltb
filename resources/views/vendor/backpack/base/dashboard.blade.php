@extends(backpack_view('blank'))

@php
    
    $userCount = App\Clients::count();

     // notice we use Widget::add() to add widgets to a certain group
    Widget::add()->to('before_content')->type('div')->class('row')->content([
        // notice we use Widget::make() to add widgets as content (not in a group)
        Widget::make()
            ->type('progress')
            ->class('card border-0 text-white bg-primary')
            ->progressClass('progress-bar')
            ->value($userCount)
            ->description('Clients inscrits.')
            ->progress(100*(int)$userCount/1000),
        // alternatively, to use widgets as content, we can use the same add() method,
        // but we need to use onlyHere() or remove() at the end
       
        // both Widget::make() and Widget::add() accept an array as a parameter
        // if you prefer defining your widgets as arrays
        Widget::make([
            'type' => 'progress',
            'class'=> 'card border-0 text-white bg-dark',
            'progressClass' => 'progress-bar',
            'value' => 75,
            'description' => 'x.',
            'progress' => (int)75,
        ]),
         Widget::make([
            'type' => 'progress',
            'class'=> 'card border-0 text-white bg-info',
            'progressClass' => 'progress-bar',
            'value' => 100,
            'description' => ' en attente.',
            'progress' => (int)100,
        ]),
        Widget::add()
            ->type('progress')
            ->class('card border-0 text-white bg-success')
            ->progressClass('progress-bar')
            ->value(26)
            ->description(' Validé(s).')
            ->progress(26)
            ->onlyHere(),
    ]);

    $widgets['before_content'][] = [
      'type' => 'div',
      'class' => 'row',
      'content' => [ // widgets
              [
                'type' => 'chart',
                'wrapperClass' => 'col-md-6',
                // 'class' => 'col-md-6',
                'controller' => \App\Http\Controllers\Admin\Charts\LatestUsersChartController::class,
                'content' => [
                    'header' => 'Nouveaux utilisateurs', // optional
                    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional

                ]
            ],
            [
                'type' => 'chart',
                'wrapperClass' => 'col-md-6',
                // 'class' => 'col-md-6',
                'controller' => \App\Http\Controllers\Admin\Charts\NewEntriesChartController::class,
                'content' => [
                    'header' => 'Nouvelles entrées', // optional
                    // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>', // optional
                ]
            ],
        ]
    ];

@endphp

@section('content')
    {{-- In case widgets have been added to a 'content' group, show those widgets. --}}
    @include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('group', 'content')->toArray() ])
@endsection