<div class="sidebar-module" style="margin:180px 70px 0 0; float:right; border-left: 1px solid black;border-bottom: 1px solid black;">
    <h4>&nbsp;&nbsp; Arkiv</h4>
    <ol>
        @foreach($archives as $archive)
            <li>
                <a href="/posts?month={{ $archive['month'] }}&year={{$archive['year']}}">
                        <!-- TODO: $archive['year'] also available -->
                        {{ $archive['month'] . ' ' . $archive['year']}}
                    </a>
            </li>
        @endforeach
    </ol>
</div>