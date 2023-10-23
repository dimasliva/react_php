import React, {useState} from "react";
import { Link } from "react-router-dom";
import "./navbar.css";
import {Cart} from "../Cart/Cart";

export const Navbar = (props) => {
    const products = props.products
    const [show, setShow] = useState(false)
    return (
<>
    <nav>
        <div className="container">

            <ul className="navbar-right">
                <li>
                    <a onClick={e => setShow(!show)} id="cart"><i className="fa fa-shopping-cart"></i> Cart
                        <span className="badge">{products.length}</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <Cart show={show} products={products}/>
</>
    );
};