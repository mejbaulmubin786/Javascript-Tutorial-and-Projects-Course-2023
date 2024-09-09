

@include ('TemplateInheritance/header')

<div class="content">
  @include ('TemplateInheritance/sidebar')
    <main>
        <h2>Page 2 Content</h2>
        <p>This is the content for Page 2.</p>
    </main>
</div>

@include ('TemplateInheritance/footer')