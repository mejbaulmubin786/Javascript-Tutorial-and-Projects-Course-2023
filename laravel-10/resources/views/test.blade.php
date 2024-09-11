
@php
    $user = "Mejbaul Mubin";
    $fruits = ['Apple', 'Banana', 'Grapes', 'Orange'];
@endphp

<script>
  var data = @json($user);
  console.log(data); 
  //var data2 = @json($fruits);

  var data2 = {{ Js::from($fruits) }};
data2.forEach(function(entry){
  console.log(entry);
});  
</script>

