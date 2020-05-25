import React, {useState} from 'react'
import  {UserLogin } from '../../api/api'
import './login.css';

function Login() {
    const [username, setUsername] = useState('')
    const [password, setPassword] = useState('')

    const checkLogin= async ()=>{
        // console.log(username)
        // console.log(password)
        let user = {
            username: username,
            password: password
        }

        let result = await UserLogin(user)
        console.log(result);

        
        
    }

    return (
        <div className="container div-login">
            <div className="row">
                <div className="col-md-12 div-logo-login">
                    <img src="./public/images/login/accounting.png"/>
                </div>
            </div>
            <div className="row">
                <div className="col-md-12">
                    <div className="form-group">
                        <label>Username</label>
                        <input type="text" className="form-control" onChange={e=>setUsername(e.target.value)}/>
                    </div>
                    <div className="form-group">
                        <label >Password</label>
                        <input type="password" className="form-control" onChange={e=>setPassword(e.target.value)} />
                    </div>
                </div>
            </div>
            <div className="div-btn-login">
                <button type="submit" id="btn-login" className="btn-login" onClick={checkLogin}>Login</button>
            </div>
            <div className="row">
                <div className="col-md-12 div-error" id="div-error"></div>
            </div>
        </div>
    )
}

export default Login 