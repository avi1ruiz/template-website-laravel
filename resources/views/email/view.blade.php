<div class="email">
    <h1>Thanks for getting in contact with me</h1>
    <p>Your contact information is</p>
    <ul>
        <li>Name: {{ $data->name }}</li>
        <li>Email: {{ $data->email }}</li>
        <li>Phone: {{ $data->phone }}</li>
    </ul>

    And your message:

    <p>{{ $data->message }}</p>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700&family=Rubik+Puddles&family=Signika+Negative:wght@500;700&display=swap');
    .email {
        font-family: 'Raleway', sans-serif
    }
</style>
