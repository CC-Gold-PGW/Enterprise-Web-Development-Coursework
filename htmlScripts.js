function buildLoginArea() {
    $(`#loginArea, #errorArea`).empty();
    var htmlString;
    if (curUser === null) {
        htmlString = `
        <div id="userID">
					<p>Username</p>
					<input id="emailField" type="text">
				</div>

				<div id="userPass">
					<p>Password</p>
					<input id="passwordField" type="password">
				</div>

				<div id="subDone">
					<input type="button" value="Login" id="btnGo" onclick="login()">
				</div>
                `;
    } else {
        htmlString = `<h2>Welcome ${curUser.email}!</h2>
        <input type="button" value="Logout" id="btnLogout" onclick="logout()">`;
    }
    $(`#loginArea`).append(htmlString);
}