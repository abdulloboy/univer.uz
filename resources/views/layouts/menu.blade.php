<li class="nav-item">
    <a href="{{ route('schedules.index') }}"
       class="nav-link {{ Request::is('schedules*') ? 'active' : '' }}">
        <p>Schedules</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('groups.index') }}"
       class="nav-link {{ Request::is('groups*') ? 'active' : '' }}">
        <p>Groups</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('lessons.index') }}"
       class="nav-link {{ Request::is('lessons*') ? 'active' : '' }}">
        <p>Lessons</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('rooms.index') }}"
       class="nav-link {{ Request::is('rooms*') ? 'active' : '' }}">
        <p>Rooms</p>
    </a>
</li>


