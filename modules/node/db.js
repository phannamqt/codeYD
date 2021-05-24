const sql = require('mssql')
var custom = require('./custom');
const config = custom.config1;


const poolPromise = new Promise((resolve, reject) => {
  const poolPromise = new sql.ConnectionPool(config)
  .connect()
  .then(pool => {
    console.log('Connected to MSSQL')
    return pool
  })
  .catch(err => console.log('Database Connection Failed! Bad Config: ', err))
});


module.exports = {
  sql, poolPromise
}