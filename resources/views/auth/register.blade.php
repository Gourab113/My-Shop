<x-layout>

    <style>
        #name,
        #email,
        #password {
            width: 250px;
        }
    </style>

    <h1>Register for an account:</h1>

    <form action="{{ route('register') }}" method="POST">

        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" width="400px" required>

        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password" required>

        <br>


        <button type="submit"> Save </button>



    </form>


</x-layout>
