Laravel Routes-এর পূর্ণাঙ্গ সিলেবাস (Route Parameters, Route Names, Route Groups সহ) নিচে দেওয়া হলো:

### **1. Introduction to Laravel Routing**

- Routes কী এবং কীভাবে কাজ করে
- MVC আর্কিটেকচারে Routes এর গুরুত্ব
- `web.php` ও `api.php` এর মধ্যে পার্থক্য
- RouteServiceProvider এবং এর ভূমিকা
- Route Caching এর প্রাথমিক ধারণা

---

### **2. Basic Routing**

- **GET, POST, PUT, PATCH, DELETE Routes**:
  - HTTP Verbs এর ব্যবহার
- **Closure-based Routes**:
  - ক্লোজারের মাধ্যমে Routes ডেফাইন করা
- **Routing to Controllers**:
  - Controller মেথড এর দিকে Route নির্দেশ করা
- **Routing to Views**:
  - `Route::view()` ব্যবহার করে সরাসরি View রিটার্ন করা

---

### **3. Route Parameters**

- **Required Route Parameters**:
  - ডায়নামিক URL তৈরি করা
  ```php
  Route::get('/user/{id}', function ($id) {
      return 'User ' . $id;
  });
  ```
- **Optional Route Parameters**:
  - ঐচ্ছিকভাবে URL এর Parameters ব্যবহার করা
  ```php
  Route::get('/user/{name?}', function ($name = 'Guest') {
      return 'User ' . $name;
  });
  ```
- **Regular Expression Constraints**:
  - Route Parameters এর জন্য নিয়ম তৈরি করা (Regex)
  ```php
  Route::get('/user/{id}', function ($id) {
      return 'User ' . $id;
  })->where('id', '[0-9]+');
  ```

---

### **4. Route Names**

- **Naming Routes**:
  - `Route::name()` method দিয়ে Route এর নামকরণ করা
  ```php
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  ```
- **Generating URLs using Route Names**:
  - `route()` হেল্পার ব্যবহার করে Route এর নাম থেকে URL তৈরি করা
  ```php
  return route('dashboard');
  ```
- **Redirecting to Named Routes**:
  - Named Routes এ রিডাইরেক্ট করা

---

### **5. Route Groups**

- **Middleware-সহ Route Groups**:
  - একই Middleware দিয়ে একাধিক Routes কে গ্রুপ করা
  ```php
  Route::middleware(['auth'])->group(function () {
      Route::get('/profile', [ProfileController::class, 'show']);
      Route::get('/settings', [SettingsController::class, 'index']);
  });
  ```
- **Prefix-সহ Route Groups**:
  - একাধিক Routes এর জন্য একটি সাধারণ URL Prefix ব্যবহার করা
  ```php
  Route::prefix('admin')->group(function () {
      Route::get('/users', [AdminController::class, 'index']);
  });
  ```
- **Namespace-সহ Route Groups**:
  - নির্দিষ্ট Controller Namespace দিয়ে Routes গ্রুপ করা

---

### **6. HTTP Verbs & RESTful Routing**

- **Route::resource() Method**:
  - Resourceful Routes ব্যবহার করে CRUD অপারেশন সম্পাদন করা
  ```php
  Route::resource('posts', PostController::class);
  ```
- **API Resource Routes**:
  - `apiResource()` method API এর জন্য Resource Routes তৈরি করা

---

### **7. Route Actions**

- **Routing to Closures**:
  - Route এর জন্য সরাসরি ক্লোজার মেথড ব্যবহার করা
- **Routing to Controller Methods**:
  - নির্দিষ্ট Controller মেথডে Route নির্দেশ করা
- **Single Action Controllers**:
  - Single Action Controller ব্যবহার করে Routing করা
  ```php
  Route::get('/profile', ProfileController::class);
  ```

---

### **8. Fallback Routes**

- **Fallback Route Defining**:
  - যখন কোনো Route মেলেনা, তখন কীভাবে `Route::fallback()` method ব্যবহার করা হয়
- **Custom 404 Pages**:
  - Fallback Route এর মাধ্যমে কাস্টম 404 পেজ তৈরি করা

---

### **9. Redirect Routes**

- **Route::redirect() Method**:
  - একটি Route অন্য Route-এ রিডাইরেক্ট করা
  ```php
  Route::redirect('/old-url', '/new-url');
  ```
- **Permanent vs Temporary Redirects**:
  - Temporary (302) এবং Permanent (301) Redirect এর মধ্যে পার্থক্য

---

### **10. Middleware in Routes**

- **Attaching Middleware to Routes**:
  - নির্দিষ্ট Route-এ Middleware যুক্ত করা
  ```php
  Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
  ```
- **Using Global Middleware**:
  - অ্যাপ্লিকেশনের সব Routes এর উপর Global Middleware প্রয়োগ করা
- **Creating Custom Middleware**:
  - নিজস্ব Middleware তৈরি এবং Route-এ যুক্ত করা

---

### **11. Route Caching**

- **Using Route Caching**:
  - `php artisan route:cache` কমান্ড ব্যবহার করে Route ক্যাশিং করা
- **Clearing Route Cache**:
  - `php artisan route:clear` কমান্ড ব্যবহার করে ক্যাশ পরিষ্কার করা

---

### **12. API Routing**

- **Stateless API Routes**:
  - `api.php` ফাইলে Stateless Routes ডেফাইন করা
- **Rate Limiting for API Routes**:
  - API Routes এর জন্য `throttle` middleware প্রয়োগ করা
  ```php
  Route::middleware('throttle:60,1')->group(function () {
      Route::get('/posts', [PostController::class, 'index']);
  });
  ```

---

### **13. Route Model Binding**

- **Implicit Model Binding**:
  - Route Parameters এর মাধ্যমে Model ফেচ করা
  ```php
  Route::get('/post/{post}', function (Post $post) {
      return $post;
  });
  ```
- **Explicit Model Binding**:
  - RouteServiceProvider এর মাধ্যমে নির্দিষ্ট Model Binding যুক্ত করা
- **Binding Custom Keys**:
  - Primary Key ছাড়া অন্য Key ব্যবহার করে Model Binding করা

---

### **14. Localization in Routes**

- **Localized Route Definition**:
  - একাধিক ভাষায় Routes তৈরি করা
  ```php
  Route::group(['prefix' => LaravelLocalization::setLocale()], function() {
      Route::get('/home', 'HomeController@index');
  });
  ```
- **Route Translations**:
  - Routes এর জন্য বিভিন্ন ভাষার অনুবাদ তৈরি

---

### **15. Throttling Routes**

- **Applying Rate Limiting**:
  - নির্দিষ্ট Route এর জন্য `throttle` middleware ব্যবহার করে Rate Limiting প্রয়োগ করা
- **Customizing Throttling Rules**:
  - নিজস্ব Throttle Rules কাস্টমাইজ করা

---

এই সিলেবাস Laravel Routes সম্পর্কে বেসিক থেকে শুরু করে অ্যাডভান্সড ধারণা দিতে যথেষ্ট। আপনি এই সিলেবাস অনুসরণ করে Laravel Routes এর ওপর পূর্ণ দক্ষতা অর্জন করতে পারবেন।
