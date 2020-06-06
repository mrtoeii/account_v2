import React, {useState,useEffect} from 'react'
import  {UserLogin } from '../../api/api'
import './login.css';
import { useHistory } from 'react-router-dom';

function Login() {
    const [username, setUsername] = useState('')
    const [password, setPassword] = useState('')
    const history = useHistory();
    // if(localStorage.getItem('user')!=null){
    //     localStorage.clear()
    // }
    const checkLogin= async ()=>{
        // console.log(username)
        // console.log(password)
        let user = {
            username: username,
            password: password
        }

        let result = await UserLogin(user)
        // console.log(result);
        if(result.status===200){
            let user = {
                username: result.username,
                firstname: result.firstname,
                lastname: result.lastname,
                status: result.user_status
            }
            localStorage.setItem('user',JSON.stringify(user))
            // console.log(user);
            
            // console.log('dashboard');
            history.push('/dashboard')
        }
        
    }

    useEffect(() => {
        if(localStorage.getItem('user')!=null){
            history.push('/dashboard')
        }
    }, [])

    return (
        <div className="container div-login">
            <div className="row">
                <div className="col-md-12 div-logo-login">
                    <img src="./images/login/accounting.png"/>
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