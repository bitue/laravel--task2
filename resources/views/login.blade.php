<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Login Page</h1>
    <h1>User Registration => </h1>
   

    <form action="{{ route('people-register') }}" method="POST">
        @csrf
     
        <input 
            type="text" 
            name="name" 
            placeholder="Name" 
            minlength="3" 
            required 
        >
 
        <input 
            type="email" 
            name="email" 
            placeholder="Email" 
            required 
        >
    
        <input 
            type="password" 
            name="password" 
            placeholder="Password" 
            minlength="8" 
            required 
        >
        <button type="submit">Register</button>
    </form>
    
</body>
</html>