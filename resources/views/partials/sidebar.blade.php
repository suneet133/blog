<nav class="panel">
  <p class="panel-heading">
    Repositories
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="Search">
      <span class="icon is-small is-left">
        <i class="fa fa-search"></i>
      </span>
    </p>
  </div>
  <p class="panel-tabs">
    <a class="is-active">All</a>
    <a>Public</a>
    <a>Private</a>
    <a>Sources</a>
    <a>Forks</a>
  </p>

  @foreach($archives as $archive)
  <a class="panel-block is-active" href="/posts?month={{$archive['month']}}&year={{$archive['year']}}">
    <span class="panel-icon">
      <i class="fa fa-book"></i>
    </span>
    {{$archive['month'].' '. $archive['year']}}
  </a>
  @endforeach

  <label class="panel-block">
    <input type="checkbox">
    Remember me
  </label>
  <div class="panel-block">
    <button class="button is-primary is-outlined is-fullwidth">
      Reset all filters
    </button>
  </div>
</nav>