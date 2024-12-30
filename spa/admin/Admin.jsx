import React from "react";
import ReactDom from "react-dom/client";

const Admin = () => {
	return (
		<>
			<h1>This is from react componet</h1>
		</>
	);
};

export default Admin;

ReactDom.createRoot(document.getElementById("wp-react-plugin-id")).render(
	<Admin />
);
