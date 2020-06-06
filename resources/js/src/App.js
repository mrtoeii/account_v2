import React from 'react';
import ReactDOM from 'react-dom';
import Login from './components/login/Login'
import Dashboard from './components/dashboard/Dashboard'
import History from './helper/History'
import PrivateRoute from './helper/PrivateRoute'
import {
    BrowserRouter as Router,
    Switch,
    Route,Redirect
} from 'react-router-dom'
const url = "/account_v2/"
const routes = {
    // login : `${url}`,
    // dashboard : `${url}/dashboard`
    login : '/',
    dashboard : '/dashboard'
}
function App() {
    
    return (
       <Router history={History}>
            <Switch>
                {/* <Redirect exact from="/" to={routes.login}></Redirect> */}
                <Route exact path={routes.login} component={Login} />
                <PrivateRoute  path={routes.dashboard}  component={Dashboard} />
            </Switch>      
        </Router>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
