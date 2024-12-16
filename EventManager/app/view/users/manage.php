<div class="header">
    <h1>Users Management</h1>
    <p>View and manage your users</p>
</div>

<div class="admin">

<!-- User Section -->
<section class="admincontainer">
        <div class="formcontainer">
            <h2>Add User</h2>
            <form id="user">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" required>
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="attendee">Attendee</option>
                    <option value="admin">Admin</option>
                </select>
                <button type="submit" class="actionbtn">Add User</button>
            </form>
        </div>
        <div class="tablecontainer">
            <h2>Users</h2> <br>
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john.doe@example.com</td>
                        <td>attendee</td>
                        <td>
                            <button class="actionbtn toggle" data-dialog="detail">View</button>
                            <button class="actionbtn toggle" data-dialog="edit">Edit</button>
                            <button class="actionbtn toggle" data-dialog="delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john.doe@example.com</td>
                        <td>attendee</td>
                        <td>
                            <button class="actionbtn toggle" data-dialog="detail">View</button>
                            <button class="actionbtn toggle" data-dialog="edit">Edit</button>
                            <button class="actionbtn toggle" data-dialog="delete">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</div>


<!-- Detail Popup -->
<dialog id="detail">
    <div>
        <h2>User Details</h2>
        <div>
            <p><strong>User ID:</strong> 1</p>
            <p><strong>First Name:</strong> John</p>
            <p><strong>Last Name:</strong> Doe</p>
            <p><strong>Email:</strong> john.doe@example.com</p>
            <p><strong>Role:</strong> attendee</p>
        </div> <br>
        <button class="close">Close</button>
    </div>
</dialog>

<!-- Edit Popup -->
<dialog id="edit">
    <div>
    <div class="formcontainer">
            <h2>Edit User</h2>
            <form id="edituser">
                <label for="editfirstname">First Name:</label>
                <input type="text" id="editfirstname" name="firstname" required>
                <label for="editlastname">Last Name:</label>
                <input type="text" id="editlastname" name="lastname" required>
                <label for="editemail">Email:</label>
                <input type="email" id="editemail" name="email" required>
                <label for="editusername">Username:</label>
                <input type="text" id="editusername" name="username" required>
                <label for="editpassword">Password:</label>
                <input type="password" id="editpassword" name="password" required>
                <label for="editrole">Role:</label>
                <select id="editrole" name="role">
                    <option value="attendee">Attendee</option>
                    <option value="admin">Admin</option>
                </select>
                <button type="submit" class="actionbtn">Edit User</button>
            </form>
        </div>
        <button class="close">Close</button>
    </div>
</dialog>

<!-- Delete Popup -->
<dialog id="delete">
    <div>
        <h2>Are you sure you want to delete?</h2>
        <button class="close">Yes</button>
        <button class="close">No</button>
    </div>
</dialog>
