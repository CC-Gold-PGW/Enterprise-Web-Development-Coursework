function buildLoginArea() {
    //Dynamically build the login elements if logged out,  Logout elements if logged in
    $(`#loginArea, #errorArea`).empty();
    var htmlString;
    if (curUser === null) {
        htmlString = `
                <p>Admin Login</p>
                <div id="userID">
					<input id="emailField" type="text" placeholder="Email">
				</div>

				<div id="userPass">
					<input id="passwordField" type="password" placeholder="Password">
				</div>

				<div id="subDone">
					<input type="button" value="Login" id="btnGo" onclick="login()">
				</div>
                `;
    } else {
        htmlString = `
        </br></br>
        <h2>Welcome ${curUser.email}!</h2>
        <input type="button" value="Logout" id="btnLogout" onclick="logout()">
        <input type="button" value="Go To Dashboard" id="btnDash" onclick="gotoResults()">
        `;
    }
    $(`#loginArea`).append(htmlString);
}

function gotoResults(){
    $(location).attr(`href`, `results.php`);
}