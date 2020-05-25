import axios from 'axios'
const url = 'http://localhost/account_v2/api'

export const UserLogin = (user) => {
    return new Promise((resolve, reject) => {
      axios.post(url + '/checklogin',user).then(res => {
        resolve(res.data)
      })
    })
  }

