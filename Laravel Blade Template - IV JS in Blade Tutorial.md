```php
//এবার আমরা শিখবো ব্লেড টেমপ্লেটের ভেতর কিভাবে জাভাস্ক্রিপ্ট ব্যবহার করবো। ধরুন নিচে আমি একটি PHP এর একটি এরে বানালাম ফ্রুট নামে।
$fruits = ['Apple', 'Banana', 'Grapes', 'Orange'];
//এর ভেরিয়েবলকে যদি আমি নিচের মতো জাভাস্ক্রিপ্ট এর ভেতর লিখি
```

```js
<script>var data = {{ $fruits }};</script> // আমরা জানি ব্লেড টেম্পলেট অনেক সিকিউর যা এই ধরনের কাজ করতে দিবে না।
```

```php
//এই ধরনের কাজ করার জন্য ব্লেড টেপপ্লেটে একটি বিশেষ ডিরেকটিভ আছে যা @json
<script>
  var data =@json($fruits); // এতে আমরা পিএইসপি ভেরিয়েবল কে জাভাস্ক্রিপ্ট ভেরিয়েবল এর ভেতর এসাইন করতে পারি। এতে php ভেরিয়েবল json এ কনভার্ট হয় আর json এর ডাটাকে জাভাস্ক্রিপ্ট সহজে রিড করতে পারি।
// এখানে যদিও আমরা এরে ব্যবহার করেছি এটি এর ছাড়া অন্য সাধারণ ভেলূ হলেও একই পদ্ধতি ব্যবহার হবে।
</script>
```

Example:

@php
$user = "Mejbaul Mubin";
@endphp

<script>
  var data = {{ $user }};
  console.log(data); 
</script>

{{-- এটি রান করালে একটি ভুল বার্তা প্রদশন করবে --}}

@php
$user = "Mejbaul Mubin";
@endphp

<script>
  var data = @json($user);
  console.log(data); 
</script>

@php
$user = "Mejbaul Mubin";
$fruits = ['Apple', 'Banana', 'Grapes', 'Orange'];
@endphp

<script>
  var data = @json($user);
  console.log(data); 
  var data2 = @json($fruits);
  console.log(data2); 
</script>

---

@php
$user = "Mejbaul Mubin";
$fruits = ['Apple', 'Banana', 'Grapes', 'Orange'];
@endphp

<script>
  var data = @json($user);
  console.log(data); 
  var data2 = @json($fruits);
data2.forEach(function(entry){
  console.log(entry);
});  
</script>

# চাইলে এভাবে ও লেখা যায়।

@php
$user = "Mejbaul Mubin";
$fruits = ['Apple', 'Banana', 'Grapes', 'Orange'];
@endphp

<script>
  var data = @json($user);
  console.log(data); 
  //var data2 = @json($fruits);

  var data2 = {{ Js::from($fruits) }}; // ব্লেড টেমপ্লেটের ফিচার।
data2.forEach(function(entry){
  console.log(entry);
});  
</script>

# এবার আমরা দেখবো জাভাস্ক্রিপ্টকে কি করে টেমপ্লেট ইনহেরিটেন্স এ ব্যবহার করা যায়।
