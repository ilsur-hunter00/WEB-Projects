import React from 'react'
import './AuthReq.css'
import AuthReqImage from '../../../img/Icon.png'

const AuthReq = () => {

    return (
        <div className="auth-req">
            <div className="auth-req__image">
                <img src={ AuthReqImage } alt="" />
            </div>
            <div className="auth-reg__info">
                Authorization required
            </div>
        </div>
    )
}

export default AuthReq