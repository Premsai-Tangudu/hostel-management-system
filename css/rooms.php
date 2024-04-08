.imagewrapper{
    height: 150px;
    width: 150px;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
  }
  
  * {
    box-sizing: border-box;
  
    margin: 0;
    padding: 0;
    font-family: "Encode Sans Expanded",sans-serif;
  
  
  }
  
  /* Create three columns of equal width */
  .columns {
    float: left;
    width: 25%;
    padding: 8px;
  
  
  }
  
  /* Style the list */
  .price {
    list-style-type: none;
    border:  solid #eee;
    box-shadow: 15px;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    border-radius: 15px;
  }
  
  /* Add shadows on hover */
  .price:hover {
    box-shadow: 0 8px 12px 0 rgb(20, 20, 20)
  }
  
  /* Pricing header */
  .price .header {
  
    color: black;
    font-size: 25px;
  
  }
  
  /* List items */
  .price li {
  
    padding: 20px;
    text-align: center;
  }
  
  /* Grey list item */
  .price .grey {
  
    font-size: 20px;
  }
  
  /* The "Sign Up" button */
  .button {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
      border-radius:  5px;
  }
  
  /* Change the width of the three columns to 100%
  (to stack horizontally on small screens) */
  @media only screen and (max-width: 600px) {
    .columns {
      width: 100%;
    }
  }
  
  
  
  
  
  
  
  
  .Nav{
  background: black;
    height: 80px;
  
  display: flex;
  justify-content: center;
  align-items: center;
  position: sticky;
  top: 0;
  z-index:10;
  
  
  }
  
  @media screen and (max-width: 960px) {
    .Nav{
      transition: 0.8s all ease;
    }
  }
  .NavbarContainer{
    display: flex;
  justify-content: space-between;
  height: 80px;
  z-index: 1;
  width: 100%;
  padding: 0 24px;
  max-width: 1100px;
  
  }
  @media screen and (max-width: 768px){
    .NavbarContainer{
      padding: 0 60px;
    }
  }
  
  .NavLogo{
    color:red;
  justify-self: flex-start;
  cursor: pointer;
  font-size: 1.5rem;
  display: flex;
  align-items: center;
  margin-left: 24px;
  font-weight: bold;
  text-decoration: none;
  }
  
  .MobileIcon{
    display: none;
  }
  @media screen and (max-width: 768px){
    .MobileIcon{
     display: block;
     position: absolute;
     top:0;
     right: 0;
     transform: translate(-100%,60%);
     font-size: 1.8rem;
     cursor: pointer;
     color: #fff;
   }
  
  }
  
  .NavMenu{
    display: flex;
  align-items: center;
  list-style:none;
  text-align:center;
  margin-right: -22px;
  
  }
  @media screen and (max-width: 768px){
    .NavMenu{
      display:none;
    }
  }
  .NavItem{
    height: 80px;
  }
  
  .NavLinks{
    color: #fff;
  display: flex;
  align-items:center;
  text-decoration: none;
  padding: 0 1rem;
  height: 100%;
  cursor: pointer;
  }
  .NavLinks.active{
      border-bottom: 3px solid #01bf71;
  
  
  }
  .NavBtn{
    display: flex;
    align-items: center;
  
  
  }
  
    @media screen and (max-width: 768px){
      .NavBtn{
      display: none;
  }
  }
  
  .NavBtnLink{
    border-radius: 50px;
    background: #01bf71;
    whitespace: nowrap;
    padding: 10px 22px;
    color: #010606;
    font-size: 16px;
    outline: none;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    text-decoration: none;
  
  }
  
  .NavBtnLink:hover{
  
      transition: all 0.2s ease-in-out;
      background: #fff;
      color: #010606;
  
  }
  