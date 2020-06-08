
@if($data['email'])
    <h3>Заявка на участие в партнерской программе:</h3>
@else
    <h3>Заявка с сайта:</h3>
@endif

<p>Имя: {{ $data['name'] }}</p>
<p>Телефон: {{ $data['tel'] }}</p>


@if($data['mark'])
    <p>Марка: {{ $data['mark'] }}</p>
@else

@endif

@if($data['email'])
    <p>Email: {{ $data['email'] }}</p>
@else

@endif

@if($data['company'])
    <p>Организация: {{ $data['company'] }}</p>
@else

@endif

@if($data['message'])
    <p>Сообщение: {{ $data['message'] }}</p>
@else

@endif

