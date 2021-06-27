import React from 'react'
import {NavLink} from 'react-router-dom'
import './Navbar.css'

const Navbar = () => {
    return(
        <div className='navbar'>
            <nav className='navbar__items'>
                <NavLink to="/all" className="navbar__items-inner" activeClassName="navbar__items-inner--active">Все</NavLink>
                <NavLink to="/blocked" className="navbar__items-inner" activeClassName="navbar__items-inner--active">Заблокированные</NavLink>
                <NavLink to="/active" className="navbar__items-inner" activeClassName="navbar__items-inner--active">Активные</NavLink>
            </nav>
        </div>
    )
}

export default Navbar