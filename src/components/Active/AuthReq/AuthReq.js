import React from 'react'
import './AuthReq.css'
import AuthReqImage from '../../../img/Icon.png'
import { Link } from 'react-router-dom'

const AuthReq = () => {

    return (
        <Link to="/auth">
            <div className="auth-req">
                <div className="auth-req__image">
                    <img src={ AuthReqImage } alt="" />
                </div>
                <div className="auth-reg__info">
                    Authorization required
                </div>
            </div>
        </Link>
    )
}

export default AuthReq