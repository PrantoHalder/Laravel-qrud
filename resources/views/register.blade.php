<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
       background-image:url("/static/edit.jpg");
       background-size: cover;
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-size: 100% 100%;
     }
   </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create User</title>
</head>

<body>
    <form action="{{route('users.store')}}" method="post">
        @csrf
        <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Create User</h2>

            
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label 
                        class="text-gray-700 dark:text-gray-200" 
                        for="username">First Name
                        </label>
                        <input 
                        id="first_name" 
                        type="text" 
                        name="FirstName" 
                        value="{{old('FirstName')}}" 
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        <p style="color: red;">{{$errors->first("FirstName")}}</p>
                    </div>
                   
                    <div>
                        <label 
                        class="text-gray-700 dark:text-gray-200" 
                        for="username">Last Name</label>
                        <input 
                        id="last_name" 
                        type="text" 
                        name="LastName" 
                        value="{{old('LastName')}}" 
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        <p style="color: red;">{{$errors->first("LastName")}}</p>
                    </div>
                   
                    <div>
                        <label 
                        class="text-gray-700 dark:text-gray-200" 
                        for="username">Username</label>
                        <input 
                        id="username" 
                        type="text" 
                        name="username" 
                        value="{{old('username')}}" 
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        <p style="color: red;">{{$errors->first("username")}}</p>
                    </div>
                  
                    <div>
                        <label 
                        class="text-gray-700 dark:text-gray-200" 
                        for="emailAddress">Email Address</label>
                        <input 
                        id="email" 
                        type="email" 
                        name="email" 
                        value="{{old('email')}}" 
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        <p style="color: red;">{{$errors->first("email")}}</p>
                    </div>
                   
                    <div>
                        <label
                        class="text-gray-700 dark:text-gray-200" 
                        for="password">Password
                        </label>
                        <input 
                        id="password" 
                        type="password" 
                        name="password" 
                        value=""
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        <p style="color: red;">{{$errors->first("password")}}</p>
                    </div>
                   
                </div>

                <div class="flex justify-end mt-6">
                    <button
                        class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save
                    </button>
                </div>
            </form>
        </section>
</body>

</html>