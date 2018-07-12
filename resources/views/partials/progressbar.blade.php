<div class="row progressbar--container">
    <div class="col-sm-12">
        <div class="progressbar d-flex justify-content-between">
            <div class="progress-element">
                <a href=" {{ route('scan.introductie', $scan) }} " class="" data-toggle="tooltip" data-placement="top" title="Introductie">
                    <img src="/img/simplecircle.svg" alt="">
                </a>
            </div>
            <div class="progress-element">
                <a href=" {{ route('scan.kennismaken', $scan) }} " class="" data-toggle="tooltip" data-placement="top" title="Kennismaken">
                    <img src="/img/simplecircle.svg" alt="">
                </a>
            </div>
            <div class="progress-element">
                <a href=" {{ route('scan.algemeenbeeld', $scan) }} " class="" data-toggle="tooltip" data-placement="top" title="Beoordeel de huidige gezamenlijke aanpak">
                    <img src="/img/simplecircle.svg" alt="">
                </a>
            </div>
            <div class="progress-element">
                <a href=" {{ route('scan.algemeenbeeldresultaten', $scan) }} " class="" data-toggle="tooltip" data-placement="top" title="Resultaten beoordeling huidige aanpak">
                    <img src="/img/simplecircle.svg" alt="">
                </a>
            </div>
            <div class="progress-element">
                <a href=" {{ route('scan.sessieintro', $scan) }} " class="" data-toggle="tooltip" data-placement="top" title="Introductie van de sessie">
                    <img src="/img/simplecircle.svg" alt="">
                </a>
            </div>
            @foreach ($scan->scanmodel->themes as $theme)
                <div class="progress-element themeintro">
                    <a href=" {{ route('scanquestions.intro', [$scan, $theme]) }} " class="" data-toggle="tooltip" data-placement="top" title="Introductie thema {{ $theme->id }}">
                        <img src="/img/simplecircle.svg" alt="">
                    </a>
                    <img src="/img/layer2intro.svg" alt="" class="layer2intro">
                </div>
                @foreach ($theme->questions as $question)
                    <div class="progress-element progress-element__layer2">
                        <a href=" {{ route('scanquestions.show', [$scan, $theme, $question]) }} " class="" data-toggle="tooltip" data-placement="top" title="Vraag {{ $question->id }} ">
                            <img src="/img/simplecircle.svg" alt="">
                        </a>
                    </div>
                @endforeach
                <div class="progress-element progress-element__layer2">
                    <a href=" {{ route('scanquestions.results', [$scan, $theme]) }} " data-toggle="tooltip" data-placement="top" title="Thema {{ $theme->id }} resultaten">
                        <img src="/img/simplecircle.svg" alt="">
                    </a>
                </div>
                <div class="progress-element progress-element__layer2 progress-element__last">
                    <a href=" {{ route('scanquestions.measures', [$scan, $theme]) }} " data-toggle="tooltip" data-placement="top" title="Thema {{ $theme->id }} acties">
                        <img src="/img/simplecircle.svg" alt="">
                    </a>
                </div>
            @endforeach
            @foreach ($scan->scanmodel->themes as $theme)
                <div class="progress-element">
                    <a href=" {{ route('scanquestions.bigmeasures', [$scan, $theme]) }} " data-toggle="tooltip" data-placement="top" title="Acties uitwerken thema {{ $theme->id }}">
                        <img src="/img/simplecircle.svg" alt="">
                    </a>
                </div>
            @endforeach
            <div class="progress-element">
                <a href=" {{ route('scanquestions.followup', $scan) }} " data-toggle="tooltip" data-placement="top" title="Vervolgafspraak plannen">
                    <img src="/img/simplecircle.svg" alt="">
                </a>
            </div>
            <div class="progress-element">
                <a href=" {{ route('scanquestions.complete', $scan) }} " data-toggle="tooltip" data-placement="top" title="Afgerond">
                    <img src="/img/simplecircle.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>