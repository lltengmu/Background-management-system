<div {{ $attributes->merge(['class' => 'first '.$type]) }}>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    这是alert组件 {{ $type }}
    <p class="first">{{ $alertType }}</p>
    @foreach ($message as $key => $a)
    <p>数组值{{ $key }}：{{ $a }}</p>
    @endforeach
</div>
<script>
    document.querySelector('.first').addEventListener('click',function(){
        alert(this.innerHTML);
    })
</script>