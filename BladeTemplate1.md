PHP এবং Laravel এর Blade syntax একে অপরের সাথে সম্পর্কযুক্ত হলেও Blade একটি টেমপ্লেটিং ইঞ্জিন যা Laravel framework এ ব্যবহৃত হয়। এখানে PHP এবং Blade syntax এর সাধারণ ব্যবহারের কিছু উদাহরণ দেওয়া হলো, যাতে সহজে তুলনা করা যায়:

| **PHP Syntax**                                                                                                                                     | **Blade Syntax**                                                                                       |
| -------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------ |
| **Echoing Data**                                                                                                                                   | **Echoing Data**                                                                                       |
| `<?php echo $variable; ?>`                                                                                                                         | `{{ $variable }}`                                                                                      |
| `<?php $variable; ?>`                                                                                                                              | `{{ $variable }}`                                                                                      |
| **If Statement**                                                                                                                                   | **If Statement**                                                                                       |
| `<?php if ($condition): ?>`<br>`// code`<br>`<?php endif; ?>`                                                                                      | `@if ($condition)`<br>`// code`<br>`@endif`                                                            |
| **Else/Elseif Statement**                                                                                                                          | **Else/Elseif Statement**                                                                              |
| `<?php if ($condition): ?>`<br>`// code`<br>`<?php else: ?>`<br>`// code`<br>`<?php endif; ?>`                                                     | `@if ($condition)`<br>`// code`<br>`@else`<br>`// code`<br>`@endif`                                    |
| `<?php elseif ($condition): ?>`                                                                                                                    | `@elseif ($condition)`                                                                                 |
| **For Loop**                                                                                                                                       | **For Loop**                                                                                           |
| `<?php for ($i = 0; $i < 10; $i++): ?>`<br>`// code`<br>`<?php endfor; ?>`                                                                         | `@for ($i = 0; $i < 10; $i++)`<br>`// code`<br>`@endfor`                                               |
| **Foreach Loop**                                                                                                                                   | **Foreach Loop**                                                                                       |
| `<?php foreach ($items as $item): ?>`<br>`// code`<br>`<?php endforeach; ?>`                                                                       | `@foreach ($items as $item)`<br>`// code`<br>`@endforeach`                                             |
| **While Loop**                                                                                                                                     | **While Loop**                                                                                         |
| `<?php while ($condition): ?>`<br>`// code`<br>`<?php endwhile; ?>`                                                                                | `@while ($condition)`<br>`// code`<br>`@endwhile`                                                      |
| **Do-While Loop**                                                                                                                                  | **Do-While Loop**                                                                                      |
| `<?php do { ?>`  <br>`// code`  <br>`<?php } while ($condition); ?>`                                                                               | Blade এ `do-while` নেই, কিন্তু সাধারণ <br>`while` দিয়ে কাজ করা যায়।                                    |
| **Switch Statement**                                                                                                                               | **Switch Statement**                                                                                   |
| `<?php switch($variable): ?>`<br>`<?php case 1: ?>`<br>`// code`<br>`<?php break; ?>`<br>`<?php default: ?>`<br>`// code`<br>`<?php endswitch; ?>` | `@switch($variable)`<br>`@case(1)`<br>`// code`<br>`@break`<br>`@default`<br>`// code`<br>`@endswitch` |
| **Continue and Break Statement**                                                                                                                   | **Continue and Break Statement**                                                                       |
| `<?php continue; ?>`<br>`<?php break; ?>`                                                                                                          | `@continue`<br>`@break`                                                                                |
| **Comments**                                                                                                                                       | **Comments**                                                                                           |
| `<?php // This is a comment ?>`<br>`<?php /* This is a block comment */ ?>`                                                                        | `{{-- This is a comment --}}`                                                                          |
| **Include Files**                                                                                                                                  | **Include Files**                                                                                      |
| `<?php include 'header.php'; ?>`                                                                                                                   | `@include('header')`                                                                                   |
| **Include Files with Data**                                                                                                                        | **Include Files with Data**                                                                            |
| `<?php include 'header.php'; ?>`  <br>`$data = ['name' => 'John'];`                                                                                | `@include('header', ['name' => 'John'])`                                                               |

| **PHP Syntax**                                                                                        | **Blade Syntax**                                                                 |
| ----------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| **Echoing Unescaped Data**                                                                            | **Echoing Unescaped Data**                                                       |
| `<?php echo $variable; ?>` (no escaping by default)                                                   | `{!! $variable !!}` (no escaping in Blade)                                       |
| **Comments in Multiline**                                                                             | **Comments in Multiline**                                                        |
| `<?php /* This is a multiline comment */ ?>`                                                          | `{{-- This is a multiline comment --}}`                                          |
| **Checking Empty Variables**                                                                          | **Checking Empty Variables**                                                     |
| `<?php if (empty($variable)): ?>`<br>`// code`<br>`<?php endif; ?>`                                   | `@empty($variable)`<br>`// code`<br>`@endempty`                                  |
| **Checking isset()**                                                                                  | **Checking isset()**                                                             |
| `<?php if (isset($variable)): ?>`<br>`// code`<br>`<?php endif; ?>`                                   | `@isset($variable)`<br>`// code`<br>`@endisset`                                  |
| **Authentication Check (Laravel Specific)**                                                           | **Authentication Check (Blade Specific)**                                        |
| `<?php if (auth()->check()): ?>`<br>`// code`<br>`<?php endif; ?>`                                    | `@auth`<br>`// code`<br>`@endauth`                                               |
| **Else Check Authentication**                                                                         | **Else Check Authentication**                                                    |
| `<?php if (!auth()->check()): ?>`<br>`// code`<br>`<?php endif; ?>`                                   | `@guest`<br>`// code`<br>`@endguest`                                             |
| **Include View With Data**                                                                            | **Include View With Data**                                                       |
| `<?php include 'header.php'; ?>`<br>`$data = ['name' => 'John'];`<br>`<?php include 'header.php'; ?>` | `@include('header', ['name' => 'John'])`                                         |
| **Custom Functions/Directives**                                                                       | **Custom Functions/Directives**                                                  |
| PHP Custom Function: `<?php function customFunc() { // code } ?>`                                     | Blade Custom Directive: `@directive('custom') // code @enddirective`             |
| **Component Rendering**                                                                               | **Component Rendering**                                                          |
| PHP uses view files or custom rendering logic manually.                                               | Blade Components: `<x-component-name />` or `<x-component-name :data="$data" />` |

### Laravel-Specific Blade Directives:
- **`@section` and `@endsection`**: Blade এর ভিউয়ে কন্টেন্ট সেকশন তৈরি করতে।
    ```blade
    @section('title', 'Page Title')
    @section('content')
        <p>This is the content.</p>
    @endsection
    ```
  
- **`@push` and `@stack`**: নির্দিষ্ট জায়গায় স্ক্রিপ্ট বা স্টাইল পুশ করার জন্য ব্যবহার করা হয়।
    ```blade
    @push('scripts')
        <script src="script.js"></script>
    @endpush
    @stack('scripts')
    ```

- **`@php`**: Blade টেমপ্লেটে ছোটখাট PHP কোড রান করার জন্য।
    ```blade
    @php
        $name = 'John';
    @endphp
    ```
  
### Blade Layout Structure Example:
Blade টেমপ্লেটিং ব্যবহার করে Layout তৈরি করা যায় যা PHP এর সাথে সরাসরি তুলনীয় নয়:
```blade
<!-- layouts/app.blade.php -->
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
```

Blade টেমপ্লেটিং ব্যবহারের ক্ষেত্রে HTML এবং লজিকের মধ্যে আলাদা করার সুযোগ দেয়, যা PHP এর টেমপ্লেটিং থেকে কিছুটা উন্নত এবং আরও সহজ।

### PHP Variable Defaulting vs Blade:
| **PHP Syntax** | **Blade Syntax** |
|----------------|------------------|
| `<?php $name = $name ?? 'Guest'; ?>` | `{{ $name ?? 'Guest' }}` |

### Looping Helpers:
- **`@forelse`**: যদি কোনো ডাটা না থাকে, তখন ফাঁকা অবস্থার জন্য ফোলব্যাক তৈরি করতে ব্যবহার করা হয়।
  ```blade
  @forelse ($users as $user)
      <li>{{ $user->name }}</li>
  @empty
      <li>No users</li>
  @endforelse
  ```

এই Blade সিনট্যাক্সগুলি মূলত Laravel এর মধ্যেই পাওয়া যায়, এবং এগুলো সাধারণ PHP সিনট্যাক্সের চেয়ে সহজ এবং সংক্ষিপ্ত হয়ে থাকে।

অবশ্যই, এখানে PHP এবং Blade syntax এর একটি পূর্ণাঙ্গ টেবিল দেওয়া হলো, যেখানে PHP এর প্রায় সব সাধারণ সিনট্যাক্সের Blade বিকল্পও দেখানো হয়েছে। এটি Blade এর সাথে PHP তুলনা করার জন্য একটি বিস্তৃত রেফারেন্স হিসাবে কাজ করবে।

| **PHP Syntax** | **Blade Syntax** |
|----------------|------------------|
| **Echoing Data** | **Echoing Data** |
| `<?php echo $variable; ?>`<br>`<?= $variable; ?>` | `{{ $variable }}` |
| **Echoing Unescaped Data** | **Echoing Unescaped Data** |
| `<?php echo $variable; ?>` | `{!! $variable !!}` |
| **If Statement** | **If Statement** |
| `<?php if ($condition): ?>`<br>`// code`<br>`<?php endif; ?>` | `@if ($condition)`<br>`// code`<br>`@endif` |
| **Else Statement** | **Else Statement** |
| `<?php else: ?>`<br>`// code` | `@else`<br>`// code`<br>`@endif` |
| **Elseif Statement** | **Elseif Statement** |
| `<?php elseif ($condition): ?>`<br>`// code` | `@elseif ($condition)`<br>`// code` |
| **For Loop** | **For Loop** |
| `<?php for ($i = 0; $i < 10; $i++): ?>`<br>`// code`<br>`<?php endfor; ?>` | `@for ($i = 0; $i < 10; $i++)`<br>`// code`<br>`@endfor` |
| **Foreach Loop** | **Foreach Loop** |
| `<?php foreach ($items as $item): ?>`<br>`// code`<br>`<?php endforeach; ?>` | `@foreach ($items as $item)`<br>`// code`<br>`@endforeach` |
| **While Loop** | **While Loop** |
| `<?php while ($condition): ?>`<br>`// code`<br>`<?php endwhile; ?>` | `@while ($condition)`<br>`// code`<br>`@endwhile` |
| **Do-While Loop** | **Do-While Loop** |
| `<?php do { ?>`<br>`// code`<br>`<?php } while ($condition); ?>` | Blade এ `do-while` নেই, কিন্তু সাধারণ `while` দিয়ে কাজ করা যায়। |
| **Switch Statement** | **Switch Statement** |
| `<?php switch($variable): ?>`<br>`<?php case 1: ?>`<br>`// code`<br>`<?php break; ?>`<br>`<?php endswitch; ?>` | `@switch($variable)`<br>`@case(1)`<br>`// code`<br>`@break`<br>`@default`<br>`// code`<br>`@endswitch` |
| **Continue Statement** | **Continue Statement** |
| `<?php continue; ?>` | `@continue` |
| **Break Statement** | **Break Statement** |
| `<?php break; ?>` | `@break` |
| **Include Files** | **Include Files** |
| `<?php include 'header.php'; ?>` | `@include('header')` |
| **Include Files with Data** | **Include Files with Data** |
| `<?php include 'header.php'; ?>`<br>`$data = ['name' => 'John'];` | `@include('header', ['name' => 'John'])` |
| **Include First Available File** | **Include First Available File** |
| N/A | `@includeFirst(['view1', 'view2'])` |
| **Section Definition (for Layouts)** | **Section Definition (for Layouts)** |
| N/A | `@section('content')`<br>`// content`<br>`@endsection` |
| **Extending a Layout** | **Extending a Layout** |
| N/A | `@extends('layouts.master')` |
| **Yield Content in Layout** | **Yield Content in Layout** |
| N/A | `@yield('content')` |
| **Comments (Single Line)** | **Comments (Single Line)** |
| `<?php // This is a comment ?>` | `{{-- This is a Blade comment --}}` |
| **Comments (Multiline)** | **Comments (Multiline)** |
| `<?php /* This is a multiline comment */ ?>` | `{{-- This is a multiline comment --}}` |
| **Isset Check** | **Isset Check** |
| `<?php if (isset($variable)): ?>`<br>`// code`<br>`<?php endif; ?>` | `@isset($variable)`<br>`// code`<br>`@endisset` |
| **Empty Check** | **Empty Check** |
| `<?php if (empty($variable)): ?>`<br>`// code`<br>`<?php endif; ?>` | `@empty($variable)`<br>`// code`<br>`@endempty` |
| **Auth Check (Laravel Specific)** | **Auth Check (Laravel Specific)** |
| `<?php if (auth()->check()): ?>`<br>`// code`<br>`<?php endif; ?>` | `@auth`<br>`// code`<br>`@endauth` |
| **Guest Check (Laravel Specific)** | **Guest Check (Laravel Specific)** |
| `<?php if (!auth()->check()): ?>`<br>`// code`<br>`<?php endif; ?>` | `@guest`<br>`// code`<br>`@endguest` |
| **CSRF Token for Forms (Laravel Specific)** | **CSRF Token for Forms (Laravel Specific)** |
| N/A | `@csrf` |
| **Push to Stack** | **Push to Stack** |
| N/A | `@push('scripts')`<br>`// code`<br>`@endpush` |
| **Pop from Stack** | **Pop from Stack** |
| N/A | `@stack('scripts')` |
| **PHP Inside Blade** | **PHP Inside Blade** |
| `<?php $variable = 'value'; ?>` | `@php`<br>`$variable = 'value';`<br>`@endphp` |

### Blade-Specific:
Blade এর কয়েকটি বিশেষ ডিরেক্টিভ রয়েছে যা PHP এর মূল সিনট্যাক্সে পাওয়া যায় না। কিছু উল্লেখযোগ্য Blade ডিরেক্টিভ নিচে দেওয়া হলো:

1. **`@forelse`**: যদি কোনো ডাটা না থাকে তখন একটি ফোলব্যাক হিসাবে কাজ করে।
   ```blade
   @forelse ($users as $user)
       <li>{{ $user->name }}</li>
   @empty
       <li>No users found.</li>
   @endforelse
   ```

2. **`@php`**: Blade এ ছোট PHP কোড ব্লক রান করার জন্য।
   ```blade
   @php
       $variable = 'Hello World';
   @endphp
   ```

3. **`@inject`**: সার্ভিস বা ক্লাস ইনজেকশন Blade টেমপ্লেটে করার জন্য।
   ```blade
   @inject('service', 'App\Services\MyService')
   <p>{{ $service->getData() }}</p>
   ```

### Laravel Authentication Blade Directives:
1. **`@auth`**: শুধু অথেন্টিকেটেড ইউজারদের জন্য ডাটা দেখানোর জন্য।
   ```blade
   @auth
       <p>Welcome, authenticated user!</p>
   @endauth
   ```

2. **`@guest`**: অথেন্টিকেটেড না হওয়া ইউজারদের জন্য ডাটা দেখানোর জন্য।
   ```blade
   @guest
       <p>Welcome, guest user!</p>
   @endguest
   ```

এই টেবিলটি PHP এবং Blade সিনট্যাক্সের মধ্যে প্রধান পার্থক্য এবং মিলগুলো দেখায়। Blade এর টেমপ্লেট ইঞ্জিন Laravel framework এর জন্য তৈরি করা হয়েছে এবং এটি HTML এবং PHP কোড সহজে সংযুক্ত করে। Blade সিনট্যাক্স সরাসরি PHP কোডকে আরও সহজ ও সংক্ষিপ্ত করে, বিশেষ করে যখন ভিউ লজিক এবং টেমপ্লেট ব্যবহার করা হয়।
