<h3>Заявка с сайта:</h3>
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

<p>Сообщение: {{ $data['message'] }}</p>
