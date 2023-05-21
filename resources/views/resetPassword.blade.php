@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $errors }}</li>
        @endforeach
    </ul>

@endif
<form action="" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $user[0]['id'] }}">
    <input type="password" name="password" id="password" placeholder="New Password">
    <input type="password" name="password_confirmation" id="password_confirmation"
        placeholder="New Password Confirmation">

    <br>
    <br>
    <input type="submit" value="Reset New Password">
</form>
