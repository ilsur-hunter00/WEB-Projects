import React from 'react'
import './Auth.css'
import IconButton from "@material-ui/core/IconButton";
import Visibility from "@material-ui/icons/Visibility";
import InputAdornment from "@material-ui/core/InputAdornment";
import VisibilityOff from "@material-ui/icons/VisibilityOff";
import Input from "@material-ui/core/Input";
import { Link } from 'react-router-dom'

const Auth = () => {

    const [values, setValues] = React.useState({
    password: "",
    showPassword: false,
    });
    
    const handleClickShowPassword = () => {
        setValues({ ...values, showPassword: !values.showPassword });
    };
    
    const handleMouseDownPassword = (event) => {
        event.preventDefault();
    };
    
    const handlePasswordChange = (prop) => (event) => {
        setValues({ ...values, [prop]: event.target.value });
    };

    return (
        <div className="auth">
            <form className="auth-form">
            
                <Input 
                    type="text"
                    placeholder="Login"
                    className="auth-form__input"
                    required
                />
                <Input
                    type={values.showPassword ? "text" : "password"}
                    onChange={handlePasswordChange("password")}
                    value={values.password}
                    className="auth-form__input"
                    placeholder="Password"
                    required
                    endAdornment={
                    <InputAdornment position="end">
                        <IconButton
                        onClick={handleClickShowPassword}
                        onMouseDown={handleMouseDownPassword}
                        >
                        {values.showPassword ? <Visibility /> : <VisibilityOff />}
                        </IconButton>
                    </InputAdornment>
                    }
                />
                <Link to="/all" className="auth-form__button">Войти</Link>
                
            </form>
        </div>
    )
}

export default Auth