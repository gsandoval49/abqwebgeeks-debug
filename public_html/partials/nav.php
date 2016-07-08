<header ng-controller="NavController">
	<bootstrap-breakpoint></bootstrap-breakpoint>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" aria-expanded="false" ng-click="toggleCollapse();">
					<span class="sr-only">Toggle navigation</span>
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>
				<a class="navbar-brand" href="/">
					<span class="fa-stack">
						<i class="fa fa-bug fa-stack-1x"></i>
						<i class="fa fa-ban fa-stack-2x text-danger"></i>
					</span>
					Debugging de Deep Dive Dylan
				</a>
			</div>

			<div class="navbar-collapse" ng-class="{collapse: navCollapsed}">
				<ul class="nav navbar-nav navbar-right" ng-click="toggleCollapse();">
					<li><a href="/">Home</a></li>
					<li><a href="/recursion/">Recursion</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</header>