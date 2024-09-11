## Laravel Blade টেমপ্লেট ইনহেরিটেন্স

আমরা Laravel Blade এর মাধ্যমে টেমপ্লেট ইনহেরিটেন্স ব্যবহার করতে পারি, যা আমাদের ডিজাইন চেঞ্জের কাজকে অনেক সহজ করে দেয়। পূর্বে প্রতিটি পেজে আলাদা হেডার, ফুটার যুক্ত করতাম। ডিজাইন পরিবর্তন করতে হলে প্রতিটি পেজে পরিবর্তন করতে হত। টেমপ্লেট ইনহেরিটেন্সের মাধ্যমে আমরা শুধুমাত্র একটি পেজ পরিবর্তন করলেই সব পেজে পরিবর্তন দেখা যাবে।

### Layout তৈরি করা

```blade
<!-- layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoloty For All - @yield('title')</title>
</head>
<body>
    <header>
        <!-- Header Content -->
    </header>

    <aside>
        <!-- Sidebar Content -->
    </aside>

    <article>
        @yield('content') <!-- এখানে আমরা প্রতিটি পেজের ডাইনামিক কনটেন্ট রাখবো -->
    </article>

    <footer>
        <!-- Footer Content -->
    </footer>
</body>
</html>
```

### Home পেজে কন্টেন্ট যুক্ত করা

```blade
<!-- home.blade.php -->
@extends('layout') <!-- layout.blade.php এর সব কিছু এখানে ইনহেরিট হবে -->

@section('title', 'Home Page') <!-- পেজের আলাদা টাইটেল যুক্ত করা -->

@section('content') <!-- layout এর কন্টেন্ট সেকশনে ডাইনামিক কনটেন্ট যোগ করা -->
    <h1>Welcome to the Home Page</h1>
@endsection
```

### ডিফল্ট ভ্যালু সেট করা

Blade টেমপ্লেটের `@yield` এর দ্বিতীয় প্যারামিটার দিয়ে ডিফল্ট ভ্যালু সেট করা যায়:

```blade
<title>Technoloty For All - @yield('title', 'Website')</title>
```

যদি কোনো পেজে `@section('title')` ব্যবহার না করা হয়, তাহলে `Website` ডিফল্ট ভ্যালু হিসেবে প্রদর্শিত হবে।

### ডিফল্ট কনটেন্ট না থাকলে

যদি কোনো পেজে কনটেন্ট না থাকে, তবে ডিফল্ট ভ্যালু হিসেবে কনটেন্ট প্রদর্শনের জন্য `@hasSection` ব্যবহার করা যায়:

```blade
<article>
    @hasSection('content')
        @yield('content')
    @else
        <h1>No content found</h1> <!-- ডিফল্ট ভ্যালু -->
    @endif
</article>
```

### @parent ডাইরেকটিভের ব্যবহার

`@parent` ব্যবহার করে প্যারেন্ট সেকশনের কনটেন্ট ধরে রাখা যায় এবং নতুন কনটেন্ট যোগ করা যায়:

```blade
<aside>
    @section('sidebar')
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Post</a></li>
        </ul>
    @show
</aside>

<!-- অন্য পেজে সাইডবারের সাথে নতুন কনটেন্ট যুক্ত করা -->
@section('sidebar')
    @parent <!-- প্যারেন্ট সাইডবারের কনটেন্ট -->
    <p>আমার প্রয়োজনীয় কনটেন্ট যুক্ত করলাম।</p>
@endsection
```

### সিএসএস বা ইমেজের লিংক যুক্ত করা

```html
<!-- রিলেটিভ লিংক -->
<link rel="stylesheet" href="css/style.css" />

<!-- এবসোলিউট লিংক (asset হেল্পার ফাংশন ব্যবহার) -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />

<!-- ইমেজ যুক্ত করা -->
<img src="{{ asset('images/photo.jpg') }}" alt="Image Description" />
```

---

এভাবে আপনার Laravel Blade এর টেমপ্লেট ইন্টারিটেন্স সঠিকভাবে কাজে লাগিয়ে বিভিন্ন পেজের জন্য ডাইনামিক কনটেন্ট সহজেই তৈরি করা সম্ভব।
