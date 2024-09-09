

@include ('TemplateInheritance/header')

<div class="content">
  @include ('TemplateInheritance/sidebar')
    <main>
        <h2>Page 3 Content</h2>
        <p>This is the content for Page 3.</p>
    </main>
</div>

@include ('TemplateInheritance/footer')