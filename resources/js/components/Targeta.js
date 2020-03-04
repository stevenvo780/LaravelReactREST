import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Targeta extends Component {

   //se ejecuta antes de montar el componente
   async componentWillMount()
    {
       
    }
 /* 
    //antes de actualizar el componente
    shouldComponentUpdate(nextProps, nextState)
    {

    }
    //Modifica el state
    componentWillReceiveProps(nextProps)
    {

    }
 */
    //Se ejecuta despues de actualizar los pros y estados
    async componentDidMount()
    {
        await this.fetchTargeta();


        /* setTimeout(() => {
            this.setState({
                image: 'https://data.pixiz.com/output/user/frame/preview/400x400/7/9/0/1/2181097_dd67d.jpg'
            })
        }, 5000); */
    }

    async fetchTargeta () {
        
        fetch('http://localhost:8000/api/productos')
        .then(res => res.json())
        .then((data) => {
            console.log(data);
            this.setState({Data: data })
        })
        .catch(console.log)
        
       
    }


    constructor(props) {
        super(props)

    }

    render(){
        
        const targetas = this.state;
        console.log(targetas);
        
        /* if (targetas['targetas'] != null) {
            console.log(targetas['targetas']);
          for (const [nombre, descipcion, image] of targetas['targetas'].entries()) {
                return (
                    <div className="card" style={{width: 350}}>
                    <img style={{height: 300, width: 300, margin: 20}} src={targetas.image} className="card-img-top rounded-circle mx-auto d-block" />
                    <div className="card-body">
                      <h5 className="card-title">{targetas.nombre}</h5>
                      <p className="card-text">{targetas.descipcion}</p>
                      <a href="/productos/{{ $producto->id }}" className="btn btn-primary">ver mas</a>
                    </div>
                  </div>
                );
                
              } 
             
        }*/
        return (
            <div className="card" style={{width: 350}}>
             {/* <img style={{height: 300, width: 300, margin: 20}} src={targetas.image} className="card-img-top rounded-circle mx-auto d-block" />
            <div className="card-body">
              <h5 className="card-title">{targetas.nombre}</h5>
              <p className="card-text">{targetas.descipcion}</p>
              <a href="/productos/{{ $producto->id }}" className="btn btn-primary">ver mas</a>
            </div>  */}
          </div>
        ); 
    }
    

  
    /* //Desmontaje de todo
    componentWillUnmont()
    {

    }

    //Control de errores
    componentDidCath()
    {

    } */
    
}

if (document.getElementById('targeta')) {
    ReactDOM.render(<Targeta />, document.getElementById('targeta'));
}
