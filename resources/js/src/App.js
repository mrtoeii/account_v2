import React from 'react';
import ReactDOM from 'react-dom';
import Login from './components/login/Login'
import {
    BrowserRouter as Router,
    Switch,
    Route
} from 'react-router-dom'
function App() {
    const url = "/account_v2/"
    return (
       <Router >
            <Switch>
                <Route exact path={`${url}`}>
                    <Login/>
                </Route>
                <Route path={`${url}/dasboard`}>
                    <Login/>
                </Route>
                {/* <Route  path="/add">
                    <Add/>  
                </Route>
                <Route  path="/edit/:id">
                    <Edit/>  
                </Route> */}
            </Switch>      
        </Router>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
