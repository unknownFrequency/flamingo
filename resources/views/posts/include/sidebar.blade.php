<div class="sidebar-module" style="margin:80px 70px 0 0; float:right; border-left: 1px solid black;border-bottom: 1px solid black;">
    <h4>Arkiv</h4>
    <ol>
        @foreach($archives as $archive)
            <li>
                <h1><a href="">
                        <!-- TODO: $archive['year'] also available -->
                        {{ $archive['month'] }}
                    </a></h1>
            </li>
        @endforeach
    </ol>
</div>