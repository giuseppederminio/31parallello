<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  
    <title>31parallelo</title>

   
    @vite(['resources/css/style1.css', 'resources/js/app.js'])

 
</head>
<body>

    
    {{-- @if (session('message'))
    <div class="alert alert-success ">
        <p class="m-0">{{session('message')}}</p>
    </div>
        
    @endif --}}
     
    <div class="min-vh-100">
      <x-navbar/>
       
        {{$slot}}
      
    </div>

 <x-footer></x-footer>
   










        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}

</body>
</html>