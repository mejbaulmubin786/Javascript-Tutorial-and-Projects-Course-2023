Laravel Routes-এর একটি পূর্ণাঙ্গ সিলেবাস ও প্রতিটি টপিক বিস্তারিত আলোচনা করা হলো:

### **1. Introduction to Laravel Routing**

Laravel-এর Routing একটি MVC ফ্রেমওয়ার্কের অন্যতম গুরুত্বপূর্ণ অংশ। এখানে Laravel কীভাবে ইউআরএল (URL) এবং ইউআরএল-এর অনুরোধকে ম্যানেজ করে, তা শিখানো হবে।

- **Topics Covered:**
  - Routes কী?
  - MVC আর্কিটেকচারে Routes-এর গুরুত্ব
  - Routes ও Controller-এর সম্পর্ক
  - `web.php` ও `api.php` এর পার্থক্য
  - Route Service Provider
  - RouteServiceProvider এর ভিতরে Route Binding

---

### **2. Basic Routing**

Laravel এর Routes তৈরির মৌলিক ধাপগুলো শিখানো হবে।

- **Subtopics:**
  - **GET Route**: ডেটা রিট্রিভের জন্য ব্যবহৃত।
  - **POST Route**: নতুন ডেটা তৈরি বা সাবমিট করার জন্য ব্যবহৃত।
  - **PUT & PATCH Route**: ডেটা আপডেট করার জন্য ব্যবহৃত।
  - **DELETE Route**: ডেটা মুছে ফেলার জন্য ব্যবহৃত।
  - **Closure-based Routes**: সরাসরি ক্লোজার দিয়ে Routes তৈরি।
  - **Routing to Controllers**: Controller মেথড-এ কিভাবে Route নির্ধারণ করা হয়।

---

### **3. HTTP Verbs & RESTful Routing**

RESTful আর্কিটেকচারের মাধ্যমে HTTP মেথডস এবং CRUD অপারেশন সম্পর্কে বিস্তারিত।

- **Subtopics:**
  - **HTTP Methods:**
    - `GET`, `POST`, `PUT`, `PATCH`, `DELETE` এর ব্যবহার।
  - **Route::resource() Method**:
    - Resources এর জন্য Single Line Route তৈরি।
    - Resource Route এর জন্য Controller এর Convention।
  - **Customizing Resource Routes**:
    - Resource Routes কাস্টমাইজ করা (বিশেষ URL বা Method)।
  - **API Routes**:
    - `apiResource()` ব্যবহার করে API এর জন্য Resource Routes তৈরি।

---

### **4. Route Actions**

Routes এর Action Define করার বিভিন্ন উপায়।

- **Subtopics:**
  - **Closure-based Route Action**: ক্লোজার ফাংশন হিসেবে কাজ করে।
  - **Controller-based Route Action**: নির্দিষ্ট Controller মেথড-এর দিকে Route নির্দেশ করে।
  - **Single Action Controllers**:
    - `__invoke()` method ব্যবহার করে Single Action Controller Route।

---

### **5. Fallback Routes**

Fallback Routes কিভাবে ব্যবহার করা হয় যা তখন কার্যকর হয় যখন কোনো নির্দিষ্ট Route না পাওয়া যায়।

- **Subtopics:**
  - **Fallback Route Defining**: `Route::fallback()` method ব্যবহারের মাধ্যমে।
  - **Custom 404 Page**: Route না পেলে কাস্টম 404 পেজ রিসপন্স দেওয়া।
  - **Handling Undefined Routes**: কিভাবে অজানা Routes হ্যান্ডেল করতে হয়।

---

### **6. Redirect Routes**

একটি URL থেকে অন্য URL-এ Redirect করার পদ্ধতি।

- **Subtopics:**
  - **Route::redirect() Method**:
    - একটি Route অন্য Route-এ রিডাইরেক্ট করা।
  - **Permanent Redirect (301)** এবং **Temporary Redirect (302)** এর মধ্যে পার্থক্য।

---

### **7. Middleware in Routes**

Middleware ব্যবহারের মাধ্যমে Routes এর ওপর বিভিন্ন গাইডলাইন প্রয়োগ করা।

- **Subtopics:**
  - **Attaching Middleware to Routes**: নির্দিষ্ট Route-এ Middleware যুক্ত করা।
  - **Global Middleware**:
    - পুরো অ্যাপ্লিকেশনের জন্য Global Middleware প্রয়োগ করা।
  - **Route Groups & Middleware**:
    - Route Group তৈরি করে একাধিক Route এর উপর Middleware প্রয়োগ।
  - **Custom Middleware Creation**:
    - কাস্টম Middleware তৈরি এবং Route-এ যুক্ত করা।
  - **Built-in Middleware Usage**:
    - Built-in Middleware যেমন `auth`, `verified`, `throttle` ব্যবহার।

---

### **8. Route Caching**

রাউট ক্যাশিং কিভাবে Laravel-এর পারফরম্যান্স উন্নত করতে সাহায্য করে তা নিয়ে আলোচনা।

- **Subtopics:**
  - **Route Caching Command**:
    - `php artisan route:cache` এর ব্যবহার।
  - **Caching Considerations**:
    - ডেভেলপমেন্টে Route Caching ব্যবহার না করার প্রয়োজনীয়তা।
  - **Clearing Route Cache**:
    - `php artisan route:clear` কমান্ড দিয়ে ক্যাশ পরিষ্কার করা।

---

### **9. API Routing**

API Routes তৈরি ও ব্যবহার সংক্রান্ত বিষয়াবলি।

- **Subtopics:**
  - **Stateless API Routes**:
    - API Routes `stateless` হিসেবে কাজ করে।
  - **Defining API Routes in api.php**:
    - `api.php` ফাইলে API Routes সংজ্ঞায়িত করা।
  - **API Resource Routes**:
    - `apiResource()` method ব্যবহার করে API এর Resource Route তৈরি।
  - **Token-based Authentication**:
    - API Routes-এ টোকেন অথেনটিকেশন যুক্ত করা।

---

### **10. Route Model Binding**

Laravel এর অন্যতম ফিচার Route Model Binding এর বিস্তারিত।

- **Subtopics:**
  - **Implicit Model Binding**:
    - URL এর মাধ্যমে অটোমেটিকভাবে Model ডেটা ফেচ করা।
  - **Explicit Model Binding**:
    - মডেলের Primary Key ছাড়া অন্য কনটেক্সট ব্যবহার করে Binding করা।
  - **Customizing Model Binding**:
    - RouteServiceProvider এর মাধ্যমে Binding কাস্টমাইজ করা।
  - **Using Binding in Nested Routes**:
    - Nested Resource Routes-এ Model Binding এর ব্যবহার।

---

### **11. Localization in Routes**

একাধিক ভাষায় Routes তৈরির জন্য Localization-এর ব্যবহার।

- **Subtopics:**
  - **Defining Localized Routes**:
    - Laravel Locales ব্যবহার করে Routes এর জন্য আলাদা আলাদা ভাষার URL তৈরি।
  - **Using Route Translations**:
    - কিভাবে বিভিন্ন ভাষায় Route অনুবাদ করা হয়।
  - **Switching Languages Based on Routes**:
    - ইউজারের URL এর মাধ্যমে ভাষা পরিবর্তন করা।

---

### **12. Throttling Routes**

একই Route-এ একাধিক অনুরোধ প্রতিরোধ করার জন্য Throttle ব্যবহার।

- **Subtopics:**
  - **Throttle Middleware**:
    - `throttle` Middleware এর সাহায্যে Route-এ Rate Limiting প্রয়োগ।
  - **Rate Limiting Techniques**:
    - নির্দিষ্ট Routes-এ Rate Limiting এর বিভিন্ন কৌশল।
  - **Customizing Throttling Behavior**:
    - ডিফল্ট Throttle এর পরিবর্তে কাস্টম Rule তৈরি।

---

এই সিলেবাসের মাধ্যমে Laravel Routing সংক্রান্ত প্রয়োজনীয় ও গভীর বিষয়গুলো শিখতে পারবেন।
