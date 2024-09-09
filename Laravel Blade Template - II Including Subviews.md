```php
@include('first') // if page name is first.blead.php
@include('first', ['status'=>'hello']) // যদি আমরা এর পাশাপাশি কোন ভেলু পাঠাতে চাই

//--------------------------------
@include('pages.header', ['message'=>'Welcome to our page']) // single valule array
<h1>Home page</h1>
@include('pages.footer') //এখানে পেইজ ফোল্ডারের  ভেতর footer.blade.php ফাইল চাইলে . এর বদলে / ও লেখা যায় তবে . লারাভেল প্রিফার করে।

//pages/header.php
<h1>Header Page</h1>
<p>{{$message}}</p>



//--------------------------------
@include('pages.header', ['message'=>'Welcome to our page', 'greet'=>'Good Morning']) // multiple value is possible
<h1>Home page</h1>
@include('pages.footer') //

//pages/header.php
<h1>Header Page</h1>
<h2>{{$message}}</h2>
<p>{{$greet}}</p>

//--------------------------------

@php
$indexedArray = array(
  "Element 1", "Element 2", "Element 3", "Element 4", "Element 5",
  "Element 6", "Element 7", "Element 8", "Element 9", "Element 10",
  "Element 11", "Element 12", "Element 13", "Element 14", "Element 15",
  "Element 16", "Element 17", "Element 18", "Element 19", "Element 20"
);
@endphp


@include('pages.header', ['names'=>$indexedArray])
<h1>Home page</h1>
@include('pages.footer')

//pages/header.php
<h1>Header Page</h1>
@foreach ($names as $n )
    <p> {{$n}} </p>
@endforeach
//-------------------------

@php
$associativeArray = array(
    "Name" => "John Doe",
    "Email" => "john@example.com",
    "Age" => 28,
    "Country" => "USA",
    "Occupation" => "Software Developer"
);
@endphp

@include('pages.header', ['names'=>$associativeArray])
<h1>Home page</h1>
@include('pages.footer')

//pages/header.php
<h1>Header Page</h1>
@foreach ($names as $key => $value )
    <p>{{$key}}=> {{$value}} </p>
@endforeach

// এখানে একটি বিষয় লক্ষ্যনিয় এরে তে যদি কোন ভেলু না থাকতো তবে কিছুই প্রিন্ট হতো না আমরা যদি চাই এই পরিস্থিতিতে একটি মেসেজ প্রিন্ট হোক

//-------------------------

@php
$associativeArray = array(

);
@endphp

@include('pages.header', ['names'=>$associativeArray])
<h1>Home page</h1>
@include('pages.footer')

//pages/header.php
<h1>Header Page</h1>
{{-- @foreach ($names as $key => $value )
    <p>{{$key}}=> {{$value}} </p>
@endforeach --}}

@forelse ($names as $key => $value )
  <p>{{$key}}=> {{$value}} </p>
@empty
  <p> No value found</p>
@endforelse
//---------------------------------------------
@include('pages.content') // আমরা যদি কোন ফাইল ইনক্লুড করি কিন্তু ঐ ফাইলটি তৈরি না থাকে তবে এরোর মেসেজ দিবে
@includeIf('pages.content') // তাই এর নতুন ্ এই ফাংশনটি ব্যবহার করতে হবে।
//---------------------------------------------
// আমরা যদি কোন ফাইল ইনক্লুড করার সাথে তার কনডিশন চেক করতে চাই যাতে কন্ডিশন ফুরপিল হলেই শুধু ফাইলটি ইনক্লুড হয় তবে।
@includeWhen(Condition Value, 'viewfile', ['status'=>'Hello']) // তাই এর নতুন ্ এই ফাংশনটি ব্যবহার করতে হবে। এর তিনটি পেরামিটার প্রথমটি কনডিশান, দ্বিতীয়টি শর্ত পুরন হলে যে ফাইল বা ভিউ এর যে ফাইল ইনক্লুড করবে শেষটা হচ্ছে ঐ ফাইলকে যদি কনো ভেলু আমরা পাঠাতে চাই। এই ফাংশনের মতো আর একটি হচ্ছে।
@includeUnless(Condition Value, 'viewfile', ['status'=>'Hello']) //এটি হচ্ছে উপরের টির উলটো এটি শর্তটি মিথ্য হলেই কেবল ফাইলটি যুক্ত করে।

//Ex:
@php
$indexedArray = array(
  "Element 1", "Element 2", "Element 3", "Element 4", "Element 5",
  "Element 6", "Element 7", "Element 8", "Element 9", "Element 10",
  "Element 11", "Element 12", "Element 13", "Element 14", "Element 15",
  "Element 16", "Element 17", "Element 18", "Element 19", "Element 20"
);
@endphp


@includeWhen(true ,'pages.header', ['names'=>$indexedArray])
<h1>Home page</h1>
@include('pages.footer')

//pages/header.php
<h1>Header Page</h1>
{{-- @foreach ($names as $key => $value )
    <p>{{$key}}=> {{$value}} </p>
@endforeach --}}

@forelse ($names as $key => $value )
  <p>{{$key}}=> {{$value}} </p>
@empty
  <p>No value found</p>
@endforelse


```
