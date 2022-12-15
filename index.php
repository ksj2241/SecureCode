<!doctype html>
<html>
	<head>
		<title>Secure Coding</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>        

	</head>

	<body>
		
		<div class="container">
			
			<!-- 상단 TITLE START -->
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="#"><span class="material-icons">home</span></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="collapsibleNavbar">
						<ul class="navbar-nav">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Secure Code1</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">1) 무차별 대입</a></li>
									<li><a class="dropdown-item" href="#">1) SQL 인젝션</a></li>
									<li><a class="dropdown-item" href="#">1) A third link</a></li>
								</ul>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Secure Code2</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">2) 무차별 대입</a></li>
									<li><a class="dropdown-item" href="#">2) SQL 인젝션</a></li>
									<li><a class="dropdown-item" href="#">2) A third link</a></li>
								</ul>
							</li>

						</ul>
					</div>
				</div>
			</nav>
			<!-- 상단 TITLE END -->

			<br/>

			<div class="row">
				<div class="col-2">ID</div>
				<div class="col-4">
					<input type="text" class="form-control" placeholder="아이디 입력">
				</div>

				<div class="col-2 text-end">비밀번호</div>
				<div class="col-4">
					<input type="password" class="form-control" placeholder="비밀번호 입력">
				</div>
			</div>

			<br/>

			<div class="row">
				<div class="col-2">
					<button type="button" class="btn btn-primary form-control">버튼</button>
				</div>
				<div class="col-4">
					<button type="button" class="btn btn-primary form-control">
						<span class="material-icons">search</span>
						검색
					</button>
				</div>

				<div class="col-2 text-end">
					<span class="material-icons">lock</span>
				</div>
				<div class="col-4">
					<input type="password" class="form-control" placeholder="비밀번호 입력">
				</div>
			</div>


			<br/>

			<div class="row">
				<div class="col-3 bg-danger">3</div>
				<div class="col-3 bg-primary">3</div>
				<div class="col-3 bg-success">3</div>
				<div class="col-3 bg-warning text-danger">3</div>
			</div>

			<div class="row">
				<div class="col-3 bg-danger">3</div>
				<div class="col-3 bg-primary">3</div>
				<div class="col-3 bg-success">3</div>
				<div class="col-3 bg-warning text-danger">3</div>
			</div>

			<div class="row">
				<div class="col-3 col-md-5 bg-danger">3</div>
				<div class="col bg-primary">3</div>
				<div class="col bg-success">3</div>
				<div class="col bg-warning text-danger">3</div>
			</div>

			<div class="row">
				<div class="col-3 bg-danger">3</div>
				<div class="col-3 bg-primary">3</div>
				<div class="col-3 bg-success">3</div>
				<div class="col-4 bg-warning text-danger">3</div>
			</div>

			<div class="row">
				<div class="col-2 bg-danger">3</div>
				<div class="col-2 bg-primary">3</div>
				<div class="col bg-success">3</div>
				<div class="col bg-secondary">3</div>
				<div class="col-1 bg-warning">3</div>
			</div>

			<br/>

			<div class="row">
				2
			</div>
		</div>

	</body>

</html>