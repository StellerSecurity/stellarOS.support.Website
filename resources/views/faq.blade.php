<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" crossorigin="anonymous">

<div class="container"><br><br><br>
    <img src="logo.svg" style="height: 60px;"><br><br>

    <div class="accordion" id="accordionExample">

        @foreach ($items as $item)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $item['id'] }}">
                <button class="accordion-button" onclick="updateUrl({{ $item['id'] }})" id="c{{ $item['id'] }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item['id'] }}" aria-expanded="true" aria-controls="collapse{{ $item['id'] }}">
                    {{ $item['title'] }}
                </button>
            </h2>
            <div id="collapse{{ $item['id'] }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $item['id'] }}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {!! $item['description'] !!}
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <br>
    If our FAQ-page does not answer one of your questions, please go to <a href="https://stellarsecurity.com/contact-us">Contact us</a> page for additional support.

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script>
$( document ).ready(function() {

    let searchParams = new URLSearchParams(window.location.search)
    let param = searchParams.get('faq')
    console.log(param);

    $("#c" + param).click();

    const scrollToEl = $("#c" + param);
    $('html').animate(
        {
            scrollTop: scrollToEl.offset().top,
        },
        800 //speed
    );
});

function updateUrl(faq) {
    var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?faq=' + faq;
    window.history.pushState({path:newurl},'',newurl);
}
</script>
