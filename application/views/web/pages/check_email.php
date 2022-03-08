

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Register New Account</h3>
            <form>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Name';
                                            }" >
                                </div>

                                <div>
                                    <input type="text" value="City" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'City';
                                            }">
                                </div>

                                <div>
                                    <input type="text" value="Zip-Code" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Zip-Code';
                                            }">
                                </div>
                                <div>
                                    <input type="text" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'E-Mail';
                                            }">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Address';
                                            }">
                                </div>
                                <div>
                                    <select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
                                    <option value="null">Select a Country</option>         
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="IN">India</option>
                                        <option value="Netherland">Netherland</option>
                                        <option value="USA">USA</option>


                                    </select>
                                </div>		        

                                <div>
                                    <input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Phone';
                                            }">
                                </div>

                                <div>
                                    <input type="text" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Password';
                                            }">
                                </div>
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div><button class="grey">Create Account</button></div></div>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>